import React from "react";
import {Link, Navigate} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
// var navLinks = document.getElementById("navLinks");
class Products extends React.Component{
    render(){
        return(
            <div>
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
        <i className="fa fa-times"  onClick={hideMenu}/>
        <ul>
          <li>
          <Link to="/index">HOME</Link>
          </li>
          <li>
          <Link to="/contactus">CONTACT US</Link>
          </li>
          <li>
            <a href="/clubs">SERVICES</a>
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
    <h2 style={{ textAlign: "center" }} className="title">
      FEATURED PRODUCTS
    </h2>
    <div className="small-container">
      <div className="col-4">
        <Link to="/product1"><a>
          <img src="css/images/product1.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/product1'; }} />
        </a></Link>
        <h4>BALENCIAGA HOODIE</h4>
        <p>$500</p>
      </div>
      <div className="col-4">
        <Link to = "/product2" ><a>

          <img src="css/images/product2.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/product2'; }} />

        </a></Link>
        <h4>COMPUTER DESK</h4>
        <p>$100</p>
      </div>
      <div className="col-4">
        <Link to = "/product3"><a>
          <img src="css/images/product3.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/product3'; }} />
        </a></ Link>
        <h4>BAGPACK</h4>
        <p>$25</p>
      </div>
      <div className="col-4">
        <Link to = "/product4"><a>
          <img src="css/images/product4.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/product4'; }} />
        </a></Link>
        <h4>ACOUSTIC GUITAR</h4>
        <p>$120</p>
      </div>
    </div>
    <footer>
      <p>SIGNED IN AS STUDENT</p>
    </footer>
  </section>
</div>

        );
    }
}
export default Products;