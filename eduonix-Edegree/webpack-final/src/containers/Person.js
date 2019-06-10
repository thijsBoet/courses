import React, { Component } from 'react';

import classes from './Person.css';
import dogImage from '../assets/dog.jpeg';

class Person extends Component {
    render() {
        return (
            <div className={classes.dogImage}>
                <h1>Hi I'm a person</h1>
                <img src={dogImage} alt='dog' />
            </div>
        );
    }
}

export default Person;