import {Cart} from "./cart.js";

let cart = new Cart;
cart = cart.cart;

const addToCartForm = document.querySelectorAll('.addToCart');

addToCartForm.forEach(addToCart => {
    addToCart.addEventListener('submit', (e) => {
        e.preventDefault();
        const id = addToCart.id.value;
        const image = addToCart.image.value;
        const name = addToCart.name.value;
        const price = addToCart.price.value;
        const status = addToCart.status.value;
        const quantity = addToCart.quantity.value;

        addItem({ id, image, name, price, status, quantity });
        // show pop up message
        showMessage('success', 'Item added to cart.');

    });
});

async function addItem(params) {
    let isExist;
    cart.forEach(item => {
        if (item.id === params.id) isExist = item;
    });

    if (!isExist)
        cart.push(params);
    updateStorage();
}


export function updateStorage() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateSum();
}

// showCart
function showCartItems() {
    let holder = document.querySelector('.holdRec');
    let li = '';
    cart.forEach(item => {
        li += `
            <tr>
                <td class="product-thumbnail">
                    <a href="/show-products/${item.id}">
<!--                                <img src="../images/${item.image}" alt="">-->
                        <img src="https://source.unsplash.com/random/100x100" alt="">
                    </a>
                </td>
                <td class="product-name">
                    <h4><a href="/show-products/${item.id}">${item.name}</a></h4>
                </td>
                <td class="product-price">$ ${item.price}</td>
                <td class="product-quantity">
                    <div class="cart--plus--minus">
                        <form action="#" class="num-block">
                            <input type="text" class="in-num" value="${item.quantity}" readonly="">
                        </form>
                    </div>
                </td>
                <td class="product-delete">
                    <button data-id="${item.id}" class="deleteItem" style="border: 0; border-radius: 10px" type="submit"><i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
        `;
    });

    holder.innerHTML = li;

}


function immediatly() {
    showCartItems();
    updateSum();
}

document.onload = immediatly();

const deleteItems = document.querySelectorAll('.deleteItem');
deleteItems.forEach(del => {
    del.addEventListener('click', e => {
        e.preventDefault();
        const id = del.dataset.id;
        cart.forEach((item, index) => {
            if (item.id === id)  cart.splice(index, 1);
        });
        del.parentElement.parentElement.remove();
        updateStorage();

        showMessage('success', 'Item removed!');
    });
});


export function showMessage(type, message) {
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
// nothing

export function updateSum() {
    let sum = 0;

    cart.forEach(item => {
        sum += (+item.price * +item.quantity);
    });
    sum = sum.toFixed(2);
    document.querySelector('.subTotal').innerHTML = `<span>Subtotal</span> $${sum}`;
}

