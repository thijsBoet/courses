import React from 'react';

import AutoScalingText from '../AutoScaledText/AutoScaledText';

class CalculatorDisplay extends React.Component {
    
    render() {
        const { value, ...props } = this.props
        
        const language = navigator.language || 'en-US'
        let formattedValue = parseFloat(value).toLocaleString(language, {
            useGrouping: true,
            maximumFractionDigits: 6
        })
        
        // Add back missing .0 in e.g. 12.0
        const match = value.match(/\.\d*?(0*)$/)
        
        if (match)
            formattedValue += (/[1-9]/).test(match[0]) ? match[1] : match[0]
            console.log(formattedValue);
        return (
            <div {...props} className="calculator-display">
            <AutoScalingText>{formattedValue}</AutoScalingText>
            </div>
        )
    }
}

export default CalculatorDisplay;