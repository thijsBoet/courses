var assert = require("chai").assert;
var val = require("../build/validator.js");
// var mochaChrome = require("mocha-chrome")


describe("Validate numeric string", function(){
    it("Length should be 10", () => {
        assert.isBelow(val.checkChar("1234567891011"),10, false)
    });
    it("Length should be 10", () => {
        assert.isBelow(val.checkChar("0123456789"),10, true)
    });
    it("Should only contain numbers", () =>{
        assert.isNumber(val.checkChar(parseFloat("1234567891011")), true);
    });
    it("Should only contain numbers", () =>{
        assert.isNumber(val.checkChar(parseFloat("Hello World")), false);
    });
});

describe("Validate string", function(){
    it("Length should be 10", () => {
        assert.isBelow(val.checkNum("abcdefghijklnop"),10, false)
    });
    it("Length should be 10", () => {
        assert.isBelow(val.checkNum("abcdefghij"),10, true)
    });
    it("Should only contain letters", () =>{
        assert.isString(val.checkNum("Hello World"), true);
    });
    it("Should only contain letters", () =>{
        assert.isString(val.checkNum("1234567891011"), false);
    });
});
