
export class Cart {
    constructor(){
        this.cart = JSON.parse(localStorage.getItem("cart")) || [];
    }
}
