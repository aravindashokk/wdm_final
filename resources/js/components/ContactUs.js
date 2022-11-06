import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class ContactUs extends React.Component{
    render(){
        return(
            <section className="header">
  <nav>
    <a href="index.html">
      <img
        src="css/images/logo.png"
        className="logo"
        width="80px"
        height="80px"
      />
    </a>
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
    <i className="fa fa-bars" onClick={showMenu} />
  </nav>
  <div className="contact-section">
    <h1>CONTACT US</h1>
    <form className="contact-form" action="index.html" method="post">
      <label htmlFor="studentID">YOUR NAME</label>
      <input type="text" className="contact-form-text" defaultValue="" />
      <label htmlFor="studentID">YOUR STUDENT ID</label>
      <input type="text" className="contact-form-text" defaultValue="" />
      <label htmlFor="studentID">YOUR EMAIL</label>
      <input type="text" className="contact-form-text" defaultValue="" />
      <label htmlFor="studentID">YOUR RESPONSE</label>
      <textarea
        className="contact-form-text"
        placeholder=""
        defaultValue={""}
      />
      <input
        type="button"
        className="contact-form-button"
        defaultValue="SEND"
      />
    </form>
  </div>
  <footer>
    <p>SIGNED IN AS STUDENT</p>
  </footer>
</section>

        );
    }
}
export default ContactUs;