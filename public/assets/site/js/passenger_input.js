class Quantity {
    static totalPassengers = 1;
    constructor(containerId, value,min,max,ids,addPass,removePass) {
        this.value = value;
        this.min = min;
        this.max= max
        this.addPass= addPass;
        this.removePass= removePass;
        this.container = document.getElementById(containerId);
        this.ids = ids;
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
                    <button type="button" id="${this.removePass}" class="quantity-input__modifier quantity-input__modifier--left">—</button>
                    <input class="quantity-input__screen" id="${this.ids}" type="text" value="${this.value}" readonly>
                    <button type="button" id="${this.addPass}" class="quantity-input__modifier quantity-input__modifier--right">+</button>
                </div>
            </div>`;
        const decrementButton = this.container.querySelector('.quantity-input__modifier--left');
        decrementButton.addEventListener('click', () => this.decrement());

        const incrementButton = this.container.querySelector('.quantity-input__modifier--right');
        incrementButton.addEventListener('click', () => this.increment());
        $("#passenger_no").text(Quantity.totalPassengers);
    }
}
new Quantity('app', 1,1,9,"numberofadult","addAdult","removeAdult");
new Quantity('app1', 0,0,9,"numberofchild","addChild","removeChild");
new Quantity('app2', 0,0,9,"numberofinfant","addInfant","removeInfant");
