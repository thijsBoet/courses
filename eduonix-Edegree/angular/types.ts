var|name|type                 value
==================================================================================
var a : number              = 1;
var b : string              = "b";
var c : boolean             = false;
var d : null                = null;
var e : undefined           = undefined;
var f : Array<number>       = [1,2,3];
var g : [number, string]    = [1,"2"];
enum Car {Toyota, Lexus, Mercedes}
var h : Car                 = Car.Toyota;  // prints index
var i                       = Car[h]       // prints value
var j : any                 = ["1", false, 123]
var k : void                = null         // has no value, but undefined or null

console.log(a,b,c,d,e,f,g,h,i,j,k)