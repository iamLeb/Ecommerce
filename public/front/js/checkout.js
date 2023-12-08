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

document.querySelector('#placeOrder').addEventListener('click', e => {
    e.preventDefault();

    const contact = document.querySelector('.contact').value;
    const firstname = document.querySelector('.firstName').value;
    const lastname = document.querySelector('.lastName').value;
    const address = document.querySelector('.address').value;
    const city = document.querySelector('.city').value;
    const province = document.querySelector('.province').value;
    const instruction = document.querySelector('.instruction').value;

    console.log(contact)
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
                // Handle success, update UI, etc.
                showMessage('success', 'Order Placed Successfully...');
                window.location.href = '/customer/orders';
            })
            .catch(error => {
                console.error(error.response.data);
                // Handle errors
            });
    }

});

showForm();
function showForm() {
    axios.get('/customer/info', {
        params: {
            id: JSON.parse(localStorage.getItem('userId'))
        }
    })
        .then(response=> {
            console.log(response.data)
            // handle success
            if (response.data) {
                document.querySelector('.showForm').innerHTML = `

                        <!-- Hidden  path-->
                        <input value="${response.data.contact}" class="contact" name="contact" type="hidden" >
                        <input value="${response.data.firstname}" class="firstName" name="firstName" type="hidden">
                        <input value="${response.data.lastname}" class="lastName" name="lastName" type="hidden" >
                        <input value="${response.data.address}" name="address" class="address" type="hidden" >
                        <input value="${response.data.city}" name="city" class="city" type="hidden">
                        <input value="${response.data.province}" name="province" class="province" type="hidden">
                        <input value="${response.data.instruction}" name="instruction" class="instruction" type="hidden">

                        <div class="footer-widget">
                            <div class="f-newsletter">
                                <div class="fw-title">
                                    <h5 class="" style="border-bottom: 2px solid lightgreen">Address</h5>
                                </div>
                                <p>Full Name: <code>${response.data.firstname + ' ' + response.data.lastname}</code></p>
                                <p>Email: <code>${response.data.contact}</code></p>
                                <p>Shipped from: <code>Africa Food General Store, Winnipeg</code></p>
                                <p>Shipped to: <code>${response.data.address + ', ' + response.data.city + ', ' + response.data.province}</code></p>
                            </div>
                            <div class="float-right btn btn-success anotherAddress" style="border-radius: 10px">Use another address</div>
                        </div>
            `;
                const anotherAddress = document.querySelector('.anotherAddress');

                anotherAddress.addEventListener('click', e => {
                    e.preventDefault();
                    let count = 1;
                    anotherAddress.innerHTML = `Getting a new address form <i class="fa fa-spinner" aria-hidden="true"></i>`;

                    setInterval(() => {
                        count--;
                        if (count === 0) {
                            localStorage.removeItem('userId');
                            window.location.href = '/cart/checkout/proceed';
                        }
                    }, 1000);
                });

            } else {
                // handle success
                document.querySelector('.showForm').innerHTML = `
                    <div class="checkout-form-top">
                        <h5 class="title">Contact information</h5>
                    </div>
                    <input class="contact" name="contact" type="text" placeholder="Email or Mobile Phone Number *">

                    <div class="building-info-wrap">
                        <h5 class="title">Billing Information</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="firstName" name="firstName" type="text" placeholder="First Name *">
                            </div>
                            <div class="col-md-6">
                                <input class="lastName" name="lastName" type="text" placeholder="Last Name *">
                            </div>
                        </div>
                        <input name="address" class="address" type="text" placeholder="Full Address *">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="city" class="city" type="text" placeholder="City">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select disabled class="form-control province" id="province">
                                    <option value="MB">Manitoba</option>
                                </select>
                            </div>
                        </div>

                        <textarea name="instruction" class="message instruction" id="message" placeholder="Delivery instruction if any ( Optional )"></textarea>
                    </div>
            `;
            }
        });
}



/*
    Use another address for delivery
 */



function validateForm(data) {
    let isValid = true;
    data.forEach(item => {
        if (!item.contact || !item.firstname || !item.lastname || !item.address || !item.city || !item.province) {
            isValid = false;
        }
    });
    return isValid;
}

