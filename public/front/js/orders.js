
/*
    Customers Order
 */

const customersOrder = document.querySelector('.customersOrder');
let hold = '';
axios.get('/customer/orders/get')
    .then(function (response) {
        // handle success
        response.data.forEach(item => {
            if (item.user_id === JSON.parse(localStorage.getItem('userId'))) {
                hold += `
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
                        <td class="product-quantity">100</td>
                    </tr>
                `;
            }
        });

        customersOrder.innerHTML = hold;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
