import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Product4 extends React.Component{
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
          <Link to="/contactus">CONTACT US</Link>
          </li>
          <li>
            <a href="clubs.html">SERVICES</a>
          </li>
          <li>
          <Link to="/products">PRODUCTS</Link>
          </li>
          <li>
          <Link to="/marketplace">MARKETPLACE</Link>
          </li>
          <img
            className="kart"
            src="css/images/kart.png"
            to = "/kart"
            width="20px"
            height="20px"
            onClick={(e) => { e.preventDefault(); window.location.href = '/kart'; }}
          />
        </ul>
      </div>
              <i className="fa fa-bars" onClick={showMenu}/>
            </nav>
            <div className="small-container">
              <div className="col-4">
                <img src="css/images/product4.png" width="" />
              </div>
              <div className="col-4">
                <h1>Acoustic Guitar</h1>
                <h3>$120</h3>
                <h3>Select Quantity</h3>
                <input className="quantity" type="number" name="" defaultValue={1} />
                <a href="#" className="btn">
                  Add to Cart
                </a>
                <h3>Product Details</h3>
                <p>
                  -Half-Sized Acoustic Guitar: The Music Alley measures 34 inches in
                  length. This and its lightweight linden body makes this, the ideal kid's
                  guitar or beginner guitar. -Classical Guitar Design: Orginintaing in the
                  19th century the shape of this guitar has sustained its popularity due
                  to its high playability.
                </p>
              </div>
            </div>
            <footer>
              <p>SIGNED IN AS STUDENT</p>
            </footer>
          </section>
          
        );
    }
}
export default Product4;