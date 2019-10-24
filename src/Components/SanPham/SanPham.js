import React from 'react';

const sanPham = (props) =>{
    return(
        <div>
            <p>Mã sản phẩm{props.masanpham}</p>
            <p>Tên sản phẩm{props.tensanpham}</p>
            <p>Giá{props.gia}</p>
            <p>Mô tả{props.children}</p>
            <br></br>
        </div>
    );
};
export default sanPham;