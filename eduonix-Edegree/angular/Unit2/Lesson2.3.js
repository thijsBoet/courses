var a = 1;
var b = "b";
var c = false;
var d = null;
var e = undefined;
var f = [1, 2, 3];
var g = [1, "2"];
var Car;
(function (Car) {
    Car[Car["Toyota"] = 0] = "Toyota";
    Car[Car["Lexus"] = 1] = "Lexus";
    Car[Car["Mercedes"] = 2] = "Mercedes";
})(Car || (Car = {}));
var h = Car.Toyota; // prints index
var i = Car[h]; // prints value
var j = ["1", false, 123];
var k = null; // has no value, but undefined or null
console.log(a, b, c, d, e, f, g, h, i, j, k);
