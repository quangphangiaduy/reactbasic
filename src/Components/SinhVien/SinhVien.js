import React from 'react';

//const inTuoi = () => {
 //   return (Math.floor(Math.random()*50))};

const sinhVien = (props) => {
    return(
        <div>
        <p>{props.hoten} tuổi{props.tuoi}</p>

        <p> {props.children} </p>

        <h1>i am person</h1>
        </div>
    );
};
export default sinhVien;
