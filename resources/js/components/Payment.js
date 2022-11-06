import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Payment extends React.Component{
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
  <div className="container">
    <form action="">
      <div className="row">
        <div className="col">
          <h3 className="title">billing address</h3>
          <div className="inputBox">
            <span>full name :</span>
            <input type="text" placeholder="john deo" />
          </div>
          <div className="inputBox">
            <span>email :</span>
            <input type="email" placeholder="example@example.com" />
          </div>
          <div className="inputBox">
            <span>address :</span>
            <input type="text" placeholder="room - street - locality" />
          </div>
          <div className="inputBox">
            <span>city :</span>
            <input type="text" placeholder="mumbai" />
          </div>
          <div className="flex">
            <div className="inputBox">
              <span>state :</span>
              <input type="text" placeholder="india" />
              <br />
            </div>
            <div className="inputBox">
              <span>zip code :</span>
              <input type="text" placeholder="123 456" />
            </div>
          </div>
        </div>
        <div className="col">
          <h3 className="title">payment</h3>
          <div className="inputBox">
            <span>cards accepted :</span>
            <img src="css/images/card_img.png" alt="" />
          </div>
          <div className="inputBox">
            <span>name on card :</span>
            <input type="text" placeholder="mr. john deo" />
          </div>
          <div className="inputBox">
            <span>credit card number :</span>
            <input type="number" placeholder="1111-2222-3333-4444" />
          </div>
          <div className="inputBox">
            <span>exp month :</span>
            <input type="text" placeholder="january" />
          </div>
          <div className="flex">
            <div className="inputBox">
              <span>exp year :</span>
              <input type="number" placeholder={2022} />
            </div>
            <div className="inputBox">
              <span>CVV :</span>
              <input type="text" placeholder="***" />
            </div>
          </div>
        </div>
      </div>
      <input
        type="submit"
        defaultValue="proceed to checkout"
        className="submit-btn"
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
export default Payment;