import React, {Component} from 'react';
// import logo from './logo.svg';
import './App.css';
import SinhVien from './Components/SinhVien/SinhVien'

class App extends Component {
  render(){
    return(
    <div className = "App">
      <h1>ung dung</h1>
      <p>cua quang</p>
      <SinhVien hoten="ti" tuoi="14">
        chơi game, ăn vặt, ngủ nướng
      </SinhVien> 
      <SinhVien hoten="teo" tuoi="13" />
      <SinhVien hoten="tèo" tuoi="17" />
      <SinhVien hoten="tí" tuoi="15" />
    </div>
      ); 
   }
}
export default App;
