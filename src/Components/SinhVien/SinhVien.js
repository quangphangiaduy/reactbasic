import React from 'react';

//const inTuoi = () => {
 //   return (Math.floor(Math.random()*50))};

const sinhVien = (props) => {
    return(
        <div>
        <h1>tôi là quang</h1>
        <p>{props.hoten} tuổi{props.tuoi}</p>
        <p> {props.children} </p>
        </div>
    );
};  
export default sinhVien;
