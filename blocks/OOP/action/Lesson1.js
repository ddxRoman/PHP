class Rectangle {
    width;
    height;
    constructor(w, h) {
        this.height = h;
        this.width = w;
    }
    get width() {
        return this._width
    }

    calcArrea() {
        return this.width * this.height;
    }
    calcPerimeter() {
        return this.width + this.height;
    }
}
const rect = new Rectangle(12, 6)
const rect2 = new Rectangle(15, 6)
const rect3 = new Rectangle(12, 3)
rect.calcArrea();
document.write("Lesson 1");
alert ("НУ че там?");