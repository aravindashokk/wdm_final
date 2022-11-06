
import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Register extends React.Component{
    render(){
        return(
          <div>
            <section class="header">
      <nav>
          <a href="index.html"><img src="css/images/logo.png" height="80px" width="80px" class="logo"/></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onClick={hideMenu}></i>
            <ul>
              <li>
                  <Link to="/index">HOME</Link>
                </li>
                <li>
                <Link to="/aboutus">ABOUT US</Link>
                </li>
                <li>
                <Link to="/login">LOGIN</Link>
                </li>
                <li>
                <a href="http://sxg4476.uta.cloud/uncategorized/blog-home/"> BLOG</a>
                </li>
                <li>
                <Link to="/contactus">CONTACT US</Link>
                </li>
                <li>
                <Link to="/studentprofile">PROFILE</Link>
                </li>
                <li>
                <Link to="/marketplace">MARKETPLACE</Link>
                </li>
              </ul>
        </div>
        <i class="fa fa-bars" onClick={showMenu}></i>
        </nav>
        <div class="register">
          <h1>Sign up</h1>
          <h4>Sign up if you have not</h4>
          <form >
              <label for="studentID">STUDENT ID</label>
              <input type="text" placeholder="" value=""/>
              <label for="Name">NAME</label>
              <input type="text" placeholder="" value=""/>
              <label for="email">EMAIL</label>
              <input type="text" placeholder="" value=""/>
              <label for="Password">PASSWORD</label>
              <input type="password" placeholder="" value=""/>
              <label for="confirmPassword">CONFIRM PASSWORD</label>
              <input type="password" placeholder="" value=""/>
              <input type="button"  value="SUBMIT"/>
          </form>
          <p class="login-prompt">Already have an account? <br/> <a href="login.html">LOGIN</a> here</p>
        </div>
      </section>
            
        </div>
        );
    }
}
export default Register;