
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
            console.log(res)
            hold += `
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="services-item">
                        <a href="contact.html" class="services-link"></a>
                        <div class="icon"><i class="flaticon-delivery"></i></div>
                        <div class="content">
                            <h5>${res.name} - ($${res.price})</h5>
                            <p>Quantity: ${res.quantity}</p>
                            <p>Delievery Statys: ${+res.status ? 'Delivered' : 'in progress...'}</p>
                        </div>
                    </div>
                </div>
            `
        });
        customersOrder.innerHTML = hold;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
