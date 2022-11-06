import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Clubs extends React.Component{
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
          <Link to="/aboutus">ABOUT US</Link>
        </li>
        <li>
        <Link to="/clubs">SERVICES</Link>
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
          to="/kart"
          width="20px"
          onClick={(e) => { e.preventDefault(); window.location.href = '/kart'; }}
          height="20px"
        />
      </ul>
    </div>
    <i className="fa fa-bars" onClick={showMenu} />
  </nav>
  <h2 style={{ textAlign: "center" }} className="title">
    FEATURED CLUBS
  </h2>
  <div className="small-container">
    <div className="col-4">
      <a >
        {" "}
        <img src="css/images/club1.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/club1'; }}/>
      </a>
      <h4>CYCLING CLUB</h4>
    </div>
    <div className="col-5">
      <a >
        {" "}
        <img src="css/images/club2.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/club2'; }}/>
      </a>
      <h4>COOKING CLUB</h4>
    </div>
    <div className="col-6">
      <a >
        {" "}
        <img src="css/images/club3.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/club3'; }} />
      </a>
      <h4>SOCCER CLUB</h4>
    </div>
    <div className="col-7">
      <a >
        {" "}
        <img src="css/images/club4.png" width="" onClick = {(e) => { e.preventDefault(); window.location.href = '/club4'; }}/>
      </a>
      <h4>MUSIC CLUB</h4>
      <div></div>
      <footer>
        <p>SIGNED IN AS STUDENT</p>
      </footer>
    </div>
  </div>
</section>

          

        );
    }
}
export default Clubs;