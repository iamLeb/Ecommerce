// let cart = JSON.parse(localStorage.getItem('carts'));
//
// let holdRec = document.querySelector('.holdRec');
// let tr = "";
// let sub = 0;
// let sum = 0;
// cart.forEach(item => {
//     tr += `
//         <tr>
//             <td class="product-thumbnail">
//                 <a href="/show-products/${item.productId}"><img src="images/${item.productImage}" alt=""></a>
//             </td>
//             <td class="product-name">
//                 <h4><a href="/show-products/${item.productId}">${item.productName}</a></h4>
//             </td>
//             <td class="product-price">$ ${item.productPrice}</td>
//             <td class="product-quantity">
//                 <div class="cart--plus--minus">
//                     <form action="#" class="num-block">
//                         <input type="text" class="in-num" value="${item.productQty}" readonly="">
//                     </form>
//                 </div>
//             </td>
//             <td class="product-delete">
//                 <button data-product-id="${item.productId}" class="deleteItem" style="border: 0; border-radius: 10px" type="submit"><i class="far fa-trash-alt"></i></button>
//             </td>
//         </tr>
//     `;
// });
//
// holdRec.innerHTML = tr;
//
//
// function updateSum() {
//     cart.forEach(item => {
//         sum += +item.productPrice * +item.productQty;
//     });
//     document.querySelector('.subTotal').innerHTML = `<span>Subtotal</span> $${sum}`;
// }
//
// updateSum();
