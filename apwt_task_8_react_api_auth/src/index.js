import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.min.css';

import axios from 'axios';
import { BrowserRouter as Router , Route, Routes} from 'react-router-dom';
import Home from './Components/Home';
import Login from './Components/Login';
import Doctors from './Components/Doctors';
import SignOut from './Components/SignOut';

var token=null;
if(localStorage.getItem('user')){
  var obj=JSON.parse(localStorage.getItem('user'));
  token=obj.access_token;
}
axios.defaults.headers.common["Authorization"]= token;

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>

  <Router>
    <Routes>
       <Route exact path='/home' element={<Home/>} />
       <Route exact path='/login' element={<Login/>} />
       <Route exact path='/doctors' element={<Doctors/>} />
       <Route exact path='/logout' element={<SignOut/>} />
    </Routes>
  </Router>

  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
