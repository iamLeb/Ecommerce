
/*
    Customers Order
 */

const customersOrder = document.querySelector('.customersOrder');
let hold = '';
axios.get('/customer/orders/get', {
    params: {
        id: JSON.parse(localStorage.getItem('userId'))
    }
})
    .then(function (response) {
        // handle success
        response.data.forEach(res => {
            hold += `
                <tr>
                    <td class="product-thumbnail">
                        <a href="/show-products/">
                           <img src="../images/${res.image}" alt="">
                        </a>
                    </td>
                    <td class="product-name">
                        <h4><a href="/show-products/">${res.name}</a></h4>
                    </td>
                    <td class="product-price">$ ${res.price}</td>
                    <td class="product-quantity">${res.quantity}</td>
                </tr>
            `
        });
        customersOrder.innerHTML = hold;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
