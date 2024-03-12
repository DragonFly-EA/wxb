class Quantity {
    constructor(containerId, value) {
        this.value = value;
        this.container = document.getElementById(containerId);
        this.render();
    }

    increment() {
        this.value++;
        this.render();
    }

    decrement() {
        if (this.value > 0) {
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
            </div>
        `;

        const decrementButton = this.container.querySelector('.quantity-input__modifier--left');
        decrementButton.addEventListener('click', () => this.decrement());

        const incrementButton = this.container.querySelector('.quantity-input__modifier--right');
        incrementButton.addEventListener('click', () => this.increment());
    }
}

const quantity = new Quantity('app', 1);
const quantity1 = new Quantity('app1', 0);
const quantity2 = new Quantity('app2', 0);
const quantity3 = new Quantity('app3', 0);
const quantity4 = new Quantity('app4', 0);
const quantity5 = new Quantity('app5', 0);
