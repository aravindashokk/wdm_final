import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Product2 extends React.Component{
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
        <i className="fa fa-times" onClick={hideMenu}/>
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
      <a href="product2.html">
        <img src="css/images/product2.png" width="" />
      </a>
    </div>
    <div className="col-4">
      <h1>Study Table</h1>
      <h3>$100</h3>
      <h3>Select Quantity</h3>
      <input className="quantity" type="number" name="" defaultValue={1} />
      <a href="#" className="btn">
        Add to Cart
      </a>
      <h3>Product Details</h3>
      <p>
        Contoured hard plastic seat and back. Tubular steel frame with
        attractive chrome finish. Extra-large work surface. Durable solid
        plastic top. Desktop Color: Sand.
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
export default Product2;