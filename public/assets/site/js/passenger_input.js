class Quantity {
    static totalPassengers = 1;
    constructor(containerId, value,min,max) {
        this.value = value;
        this.min = min;
        this.max= max
        this.container = document.getElementById(containerId);
        this.render();
    }
    increment() {
        if (Quantity.totalPassengers<this.max)
        {
            Quantity.totalPassengers++
            this.value++;
            this.render();
        }
    }
    decrement() {
        if (this.value > this.min) {
            Quantity.totalPassengers--;
            this.value--;
            this.render();
        }
    }
    render() {
        this.container.innerHTML = `
            <div>
                <p>Set the quantity</p>
                <div class="quantity-input">
                    <button type="button" class="quantity-input__modifier quantity-input__modifier--left">—</button>
                    <input class="quantity-input__screen" type="text" value="${this.value}" readonly>
                    <button type="button" class="quantity-input__modifier quantity-input__modifier--right">+</button>
                </div>
            </div>`;
        const decrementButton = this.container.querySelector('.quantity-input__modifier--left');
        decrementButton.addEventListener('click', () => this.decrement());

        const incrementButton = this.container.querySelector('.quantity-input__modifier--right');
        incrementButton.addEventListener('click', () => this.increment());
        $("#passenger_no").text(Quantity.totalPassengers);
    }
}
new Quantity('app', 1,1,9);
new Quantity('app1', 0,0,9);
new Quantity('app2', 0,0,9);
// new Quantity('app3', 0,0,9);
// new Quantity('app4', 0,0,9);
// new Quantity('app5', 0,0,9);
