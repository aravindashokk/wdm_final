
import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Index extends React.Component{
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
                  <a href="http://sxg4476.uta.cloud/uncategorized/blog-home/">BLOG</a>
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
          <div style={{ display: "flex", flexDirection: "column" }}>
            <div className="text-box">
              <h1>Students MarketPlace</h1>
              <p>
                Get the safe and private platform for your Campus Community,
                <br />
                Make buing and selling easier than ever.
              </p>
              <a href="#" className="hero-btn">
                Visit Us to know More
              </a>
            </div>
            <div className="head-container-i">
              <h1 style={{ textAlign: "center" }}>ADVERTISEMENTS</h1>
              <div className="container-i">
                <div className="col-1"> <h1 className="h1-ad">ADVERTISEMENT</h1></div>
                <div className="col-2">
                  <h1>Ad 1</h1>
                </div>
              </div>
              <div className="container-i">
                <div className="col-1"><h1 className="h1-ad">ADVERTISEMENT</h1></div>
                <div className="col-2">
                  <h1>Ad 2</h1>
                </div>
              </div>
              <div className="container-i">
                <div className="col-1"><h1 className="h1-ad">ADVERTISEMENT</h1></div>
                <div className="col-2">
                  <h1>Ad 3</h1>
                </div>
              </div>
              <div className="container-i">
                <div className="col-1"><h1 className="h1-ad">ADVERTISEMENT</h1></div>
                <div className="col-2">
                  <h1>Ad 4</h1>
                </div>
              </div>
            </div>
          </div>
          <footer></footer>
        </section>
        
        );
    }
}
export default Index;