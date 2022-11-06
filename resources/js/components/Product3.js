import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Product3 extends React.Component{
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
    <i className="fa fa-bars" onClick={showMenu} />
  </nav>
  <div className="small-container">
    <div className="col-4">
      <img src="css/images/product3.png" width="" />
    </div>
    <div className="col-4">
      <h1>BagPack</h1>
      <h3>$25</h3>
      <input className="quantity" type="number" name="" defaultValue={1} />
      <a href="#" className="btn">
        Add to Cart
      </a>
      <h3>Product Details</h3>
      <p>
        Laptop Backpack Material: High quality waterproof scratch-resistant
        Nylon (but not completely waterproof) &amp; Leather Decoration &amp;
        Smooth Metal Zipper. College Backpack Size: 15"x 11"x 6 "inches
        (L*H*W);16.5 Liters. Weight: 0.686 KG. Laptop compartment fits laptops
        up to 13 inches (measuring by screen length) and depth of 1" or less.Can
        used as school backpack, hiking daypack, travel bag, work bag,etc
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
export default Product3;