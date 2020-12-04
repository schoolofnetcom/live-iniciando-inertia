import React from 'react';

const Hello = ({name, gender, age}) => {
    // console.log(props);
    return (
        <div>
            <h1>Hello {name}</h1>
            <p>Genero: {gender}</p>
            <p>Idade {age}</p>
        </div>
    );
}

export default Hello;
