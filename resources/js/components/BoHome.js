import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class BoHome extends React.Component {
  render() {
    return (
      <>
        <section className="header-sp">
          <nav className="nav-sp">
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
        </section>
        <section className="header-sp">
          <nav style={{ paddingBottom: 50 }}>
            <div className="text-box">
              <h1 className="h1-sp">Business Owner Profile</h1>
            </div>
          </nav>
        </section>
        {/* Student Profile */}
        <div className="cusomter-profile py-4">
          <div className="container-sp">
            <div className="row">
              <div>
                <div className="card shadow-sm" style={{ display: "flex" }}>
                  <div
                    className="card-header bg-transparent text-center"
                    style={{ padding: 20 }}
                  >
                    <img
                      className="profile_img"
                      src="./css/images/student-profile-default.webp"
                      alt=""
                      style={{ height: 300, width: 300 }}
                    />
                    <h2 style={{ textAlign: "center" }}>Anderson Nai</h2>
                  </div>
                  <div className="card-body" style={{ padding: 50, fontSize: 20 }}>
                    <p className="mb-0">
                      <strong className="pr-1">
                        Business Owner Contact Number:{" "}
                      </strong>
                      1111111111
                    </p>
                    <p className="mb-0">
                      <strong className="pr-1">Email: </strong>anderson.nai@yahoo.com
                    </p>
                    <p className="mb-0">
                      <strong className="pr-1">Businesss Name: </strong>Campus Book
                      Store
                    </p>
                    <p className="mb-0">
                      <strong className="pr-1">School: </strong>UTA
                    </p>
                    <div style={{ margin: 20 }}>
                      <a href="#" className="hero-btn-sp">
                        Edit Profile
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="small-container-sp">
          <h2 className="title">Products</h2>
          <div className="row-sp">
            <div className="col-3-sp">
              <img src="./css//images/book1.avif" />
              <h4>Alumni Book Fund</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-o" />
                <i className="fa fa-star-o" />
              </div>
              <p>$20</p>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/book2.png" />
              <h4>Pace Scholarships book</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-o" />
                <i className="fa fa-star-o" />
              </div>
              <p>$30</p>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/book3.jfif" />
              <h4>Modern Elctrodynamics</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-half-o" />
              </div>
              <p>$75</p>
            </div>
          </div>
          <div className="row-sp">
            <div className="col-3-sp">
              <img src="./css//images/book4.png" />
              <h4>The Book of Thesis Books</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-o" />
              </div>
              <p>$50</p>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/book5.jfif" />
              <h4>A Field Guide to Grad School</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-o" />
              </div>
              <p>$65</p>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/book6.jfif" />
              <h4>Lab Girl</h4>
              <div className="rating">
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star" />
                <i className="fa fa-star-half-o" />
              </div>
              <p>$100</p>
            </div>

          </div>
          <div className="row-sp">
            {/* <div class="col-3"> */}
            <a href="#" className="hero-btn-sp">
              See more
            </a>
            {/* </div> */}
            {/* <div class="col-3"> */}
            <a href="#" className="hero-btn-sp" style={{ marginLeft: 10 }}>
              Add new Product
            </a>
            <a className="hero-btn-sp"><Link to="/inventory">Inventory</Link></a>
            {/* </div> */}
            <div>
                <a className="hero-btn-sp" onClick={(e) => { e.preventDefault(); window.location.href = '/additem'; }}> Add Product </a>
              </div>
          </div>
        </div>
        <div className="small-container-sp">
          <h2 className="title">Advertisements</h2>
          <div className="row-sp">
            <div className="col-3-sp">
              <img src="./css//images//25_per_off.png" />
              <h4>First time Buyer</h4>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/bo-promotion-2.jfif" />
              <h4>All Book Promotions</h4>
            </div>
            <div className="col-3-sp">
              <img src="./css//images/bo-promotion-3.png" />
              <h4>More about Book Promo 101</h4>
            </div>
          </div>
          <div className="row-sp">
            {/* <div class="col-3"> */}
            <a href="#" className="hero-btn-sp">
              See more
            </a>
            <a href="#" className="hero-btn-sp" style={{ marginLeft: 10 }}>
              Delete Advertisement
            </a>
            <div>
                <a className="hero-btn-sp" onClick={(e) => { e.preventDefault(); window.location.href = '/additem'; }}> Add Advertisement </a>
              </div>
            <br />
            {/* </div> */}
          </div>
          <div className="wrapper-sp">
            <div className="head-text"> CHAT </div>
            <div className="chat-box"> FILL THE DETAILS</div>
            <form action="#">
              <div className="field">
                <input type="text" name="" defaultValue="STUDENT ID" />
              </div>
              <div className="field">
                <input type="email" name="" defaultValue="PRODUCT ID" />
              </div>
              <div className="field">
                <input type="text" name="" defaultValue="MESSAGE" />
              </div>
              <div className="field">
                <button type="submit"> START CHAT</button>
              </div>
            </form>
          </div>
          <br />
          <br />
          <br />
          <footer style={{ left: "83%", color: "black" }}>
            <p>SIGNED IN AS BUSINESS OWNER</p>
          </footer>
        </div>
      </>

    );
  }
}
export default BoHome;