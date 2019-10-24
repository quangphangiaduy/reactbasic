import React, {Component} from 'react';
// import logo from './logo.svg';
import './App.css';
import SanPham from './Components/SanPham/SanPham'

class App extends Component {
  render(){
    return(
    <div className = "App">
      <SanPham masanpham="1" tensanpham="tivi" gia="12$" children="đây là mô tả" />
      <SanPham masanpham="2" tensanpham="quat" gia="13$" children="đây là mô tả" />
      <SanPham masanpham="3" tensanpham="dieuhoa" gia="14$" children="đây là mô tả" />
      <SanPham masanpham="4" tensanpham="tulanh" gia="15$" children="đây là mô tả" />
      <SanPham masanpham="5" tensanpham="maygiat" gia="16$" children="đây là mô tả" />
     
    </div>
      ); 
   }
}
export default App;
