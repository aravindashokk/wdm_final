import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Club1 extends React.Component{
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
      <img src="css/images/club1.png" width="" />
    </div>
    <div className="col-4">
      <h1>CYCLING CLUB</h1>
      <a href="#" className="btn">
        Join Club
      </a>
      <h3>Club Details</h3>
      <p>
        • Regular practive Sessions • Stay fit • Open for any Age Group • Get
        Involved on campus • Discount for Eary Bird • Make Connections •
        Competition at the end of the semester
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
export default Club1;