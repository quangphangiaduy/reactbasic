import React, {Component} from 'react';
// import logo from './logo.svg';
import './App.css';
import SanPham from './Components/SanPham/SanPham'

class App extends Component {
  state = {
    SanPham : [
      {masanpham : 1, tensanpham:'tivi', gia : 12},
      {masanpham : 2, tensanpham:'quat', gia : 14},
      {masanpham : 3, tensanpham:'dieuhoa', gia : 13},
    ],
  }

  xuLyCapNhat = () =>{
    this.setState(
      {
        lop:'18cdth11'
      }
    )
  }
  render(){
    return(
    <div className = "App">
      <SanPham masanpham={this.state.SanPham[0].masanpham} tensanpham={this.state.SanPham[0].tensanpham} gia={this.state.SanPham[0].gia} />
      <button onClick = {this.xuLyCapNhat} >
          CậpNhật
      </button>
    </div>
      ); 
   }
}
export default App;
