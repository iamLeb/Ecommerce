import {Cart} from "./cart.js";

let cart = new Cart;
cart = cart.cart;


// display products in checkout page
const holdAllItem = document.querySelector('.holdAllItem');
let items = '';
cart.forEach(item => {
    items += `
        <div class="os-products-item">
            <div class="thumb">
                <a href="./show-products/${item.id}"><img src="../../images/${item.image}" alt=""></a>
            </div>
            <div class="content">
                <h6 class="title"><a href="./show-products/${item.id}">${item.name}</a></h6>
                <span class="price">${item.price} ( x${item.quantity} )</span>
            </div>
             <div data-id="${item.id}" class="remove">x</div>
        </div>
    `;
});
holdAllItem.innerHTML = items;


function immediatly() {
    updateSum();
}

document.onload = immediatly();

// remove Item from checkout
document.querySelectorAll('.remove').forEach(x => {
    x.addEventListener('click', e => {
        const id = x.dataset.id;

        e.preventDefault();
        cart.forEach((item, index) => {
            if (item.id === id) cart.splice(index, 1);
        });
        x.parentElement.remove();
        updateStorage();
        showMessage('success', 'Item removed from cart.');
    });
});

function updateStorage() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateSum();
}

function showMessage(type, message) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    Toast.fire({
        icon: type,
        title: message
    });
}

export function updateSum() {
    let sum = 0;

    cart.forEach(item => {
        sum += (+item.price * +item.quantity);
    });
    sum = sum.toFixed(2);
    document.querySelector('.subTotal').innerHTML = `<span class="amount totalPrice"> $${sum}</span>`;
}


// show CheckOut
let customerInfo = "";
axios.get('/customer/info')
    .then(function (response) {
        // handle success
        response.data.forEach(data => {
            if(data.user_id == '1701755822654') {
                document.querySelector('.contact').value = data.contact;
                document.querySelector('.firstName').value = data.firstname;
                document.querySelector('.lastName').value = data.lastname;
                document.querySelector('.address').value = data.address;
                document.querySelector('.city').value = data.city;
                document.querySelector('.province').value = data.province;
                document.querySelector('.instruction').value = data.instruction;
            }
        });
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })

document.querySelector('#placeOrder').addEventListener('click', e => {
    e.preventDefault();
    const contact = document.querySelector('.contact').value;
    const firstname = document.querySelector('.firstName').value;
    const lastname = document.querySelector('.lastName').value;
    const address = document.querySelector('.address').value;
    const city = document.querySelector('.city').value;
    const province = document.querySelector('.province').value;
    const instruction = document.querySelector('.instruction').value;

    const customer = [{
        contact, firstname, lastname, address, city, province, instruction
    }];

    console.log(customerInfo);

    if (!validateForm(customer)) {
        showMessage('error', 'All fields are required');
    } else {

        // generate User_id
        let generate = JSON.parse(localStorage.getItem('userId')) || Date.now() + Math.floor(Math.random());


        localStorage.setItem('userId', JSON.stringify(generate));

        axios.post('', {
            generate, contact, firstname, lastname, address, city, province, instruction, cart
        })
            .then(response => {
                // console.log(response.data);
                // Handle success, update UI, etc.
                showMessage('success', 'Order Placed Successfully...');
                localStorage.removeItem("cart");
                setInterval(() => {
                    window.location.href = "/";
                }, 2000);
            })
            .catch(error => {
                console.error(error.response.data);
                // Handle errors
            });
    }

});

function validateForm(data) {
    let isValid = true;
    data.forEach(item => {
        if (!item.contact || !item.firstname || !item.lastname || !item.address || !item.city || !item.province) {
            isValid = false;
        }
    });
    return isValid;
}

