
import React from "react";
import { showMenu } from "../App";
import { hideMenu } from "../App";
import {Link, Navigate, useNavigate} from "react-router-dom";
import StudentProfile from "./StudentProfile";
import SchoolAdmin from "./SchoolAdmin";
import BoHome from "./BoHome";
import SuperAdmin from "./SuperAdmin";



class Login extends React.Component{
    render(){
      
      function login(){
        // let navigate = useNavigate();
        var role = document.getElementById("role").value;
        if(role == 'student'){
          <StudentProfile/>
          // <Link to = "/student"></Link>
          // {(e) => { e.preventDefault(); window.location.href = '/studentprofile'; }};
        }
        else if(role == 'schooladmin'){
          <SchoolAdmin/>
          // {(e) => { e.preventDefault(); window.location.href = '/schooladmin'; }};
        }
        else if(role == 'businessowner'){
          <BoHome/>
          // {(e) => { e.preventDefault(); window.location.href = '/bohome'; }};
        }
        else{
          <SuperAdmin/>
          // {(e) => { e.preventDefault(); window.location.href = '/superadmin'; }};
        }
      }
        return(
            
            <div class="header">
                <nav>
                    <a href="index.html"><img src="css/images/logo.png" height="80px" width="80px" class="logo"/></a>
                    <div className="nav-links" id="navLinks">
              <i className="fa fa-times" onClick={hideMenu} />
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
                  <i className="fa fa-bars" onClick={showMenu}></i>
                  </nav>
                  <div className="login">
                    <h1 className="">LOG IN</h1>
                    <form >
                        <label for="studentID">STUDENT ID</label>
                        <input type="text" placeholder="" value=""/>
                        <label for="password">PASSWORD</label>
                        <input type="password" placeholder="" value=""/>
                        <label for="role">ROLE</label>
                        <select name="Role" id="role" className="role-select">
                          <option value="student">Student</option>
                          <option value="schooladmin">School Admin</option>
                          <option value="businessowner">Business Owner</option>
                          <option value="superadmin">Super Admin</option>
                        </select>
                        <input type="button"  value="LOGIN" onClick = {login}/>
                    </form>
                    <p className="login-prompt"> <br/>  <Link to="/forgotpass">Forgot Password</Link> <br/>Do not have an account yet? <br/> <Link to="/register">Register</Link> here</p>
                  </div>
                </div>
        );
    }
}
export default Login;
 {/* <script type="text/javascript">
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
              navLinks.style.right = "0";
            }
            function hideMenu(){
              navLinks.style.right = "-200px";
            }
          </script>
           */}