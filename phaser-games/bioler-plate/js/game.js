'use strict'

// new scene
let gameScene = new Phaser.Scene('Game');

gameScene.init = function(){
    
}

gameScene.preload = function () {
    this.load.image('background', 'assets/images/background-city.png');

    this.load.audio('correct', 'assets/audio/correct.mp3');
}

gameScene.create = function () {
    this.add.sprite(0, 0, 'background').setOrigin(0, 0);

    let soundSample = this.sound.add('correct');
    soundSample.play();
}

let config = {
    type: Phaser.AUTO,
    width: 640,
    height: 360,
    scene: gameScene,
    title: 'Spanish learning game',
    pixelArt: false
}

let game = new Phaser.Game(config);