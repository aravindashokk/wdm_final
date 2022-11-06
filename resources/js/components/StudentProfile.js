import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
// var navLinks = document.getElementById("navLinks");
class StudentProfile extends React.Component {
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
          <div className="header-sp">
            <nav>
              <div className="text-box">
                <h1 className="h1-sp">Student Profile</h1>
              </div>
            </nav>
          </div>
          {/* Student Profile */}
          <div className="cusomter-profile-py-4">
            <div className="container-sp">

              <div className="row-sp">

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
                      <h2 style={{ textAlign: "center" }}>Jordan Nelson</h2>
                    </div>
                    <div className="card-body" style={{ padding: 50, fontSize: 20 }}>
                      <p className="mb-0">
                        <strong className="pr-1">Student ID: </strong>1111111111
                      </p>
                      <p className="mb-0">
                        <strong className="pr-1">Email: </strong>
                        jordan.nelson@mavs.uta.edu
                      </p>
                      <p className="mb-0">
                        <strong className="pr-1">Major: </strong>Computer Science
                      </p>
                      <div style={{ margin: 20, textAlign: "center" }}>
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
                <img
                  src="./css//images/product1.png"
                  onclick="location.href='product1.html';"
                />
                <h4>Balenciaga Hoodie</h4>
                <div className="rating">
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star-o" />
                </div>
                <p>$500</p>
              </div>
              <div className="col-3-sp">
                <img
                  src="./css//images/product2.png"
                  onclick="location.href='product1.html';"
                />
                <h4>Study Table</h4>
                <div className="rating">
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star-o" />
                </div>
                <p>$120</p>
              </div>
              <div className="col-3-sp">
                <img
                  src="./css//images/product3.png"
                  onclick="location.href='product1.html';"
                />
                <h4>BAGPACK</h4>
                <div className="rating">
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star" />
                  <i className="fa fa-star-half-o" />
                </div>
                <p>$25</p>
              </div>
            </div>
            <div className="row-sp">
              <div style={{ marginRight: 20 }}>
                <a href="#" className="hero-btn-sp">
                  Explore more
                </a>
              </div>
              <div>
                <a href="#" className="hero-btn-sp">
                  Delete Items
                </a>
              </div>
              <div>
                <a className="hero-btn-sp" onClick={(e) => { e.preventDefault(); window.location.href = '/return'; }}> Initiate a Return </a>
              </div>
              <div>
                <a className="hero-btn-sp" onClick={(e) => { e.preventDefault(); window.location.href = '/additem'; }}> Add Product </a>
              </div>
            </div>
          </div>
          <div className="small-container-sp">
            <h2 className="title-sp">Clubs</h2>
            <div className="row-sp">
              <div className="col-3-sp">
                <img
                  src="./css//images//club1.png"
                  onclick="location.href='club1.html';"
                />
                <h4>CSE-101 Club</h4>
                <p>Club members: 20</p>
              </div>
              <div className="col-3-sp">
                <img
                  src="./css//images//club2.png"
                  onclick="location.href='club2.html';"
                />
                <h4>CSE-101 Club</h4>
                <p>Club members: 30</p>
              </div>
              <div className="col-3-sp">
                <img
                  src="./css//images//club3.png"
                  onclick="location.href='club3.html';"
                />
                <h4>CSE-101 Club</h4>
                <p>Club members: 59</p>
              </div>
            </div>
            <div className="row-sp">
              <div style={{ marginRight: 20 }}>
                <a href="#" className="hero-btn-sp" onClick={(e) => { e.preventDefault(); window.location.href = '/additem'; }}>
                  Add clubs
                </a>
              </div>
              <div>
                <a href="#" className="hero-btn-sp">
                  Join/Leave Clubs
                </a>
              </div>
            </div>
          </div>
          <div className="small-container-sp">
            <h2 className="title">Posts</h2>
            <div className="row-sp">
              <div className="col-3-sp">
                <img src="./css//images/post1.jfif" />
                <h4>More inspiring education</h4>
              </div>
              <div className="col-3-sp">
                <img src="./css//images/post2.jfif" />
                <h4>Student Mail Center in the campus</h4>
              </div>
              <div className="col-3-sp">
                <img src="./css//images/post3.jfif" />
                <h4>Schools with more digital classes</h4>
              </div>
            </div>
            <div className="row-sp">
              <div style={{ marginRight: 20 }}>
                <a href="#" className="hero-btn-sp">
                  Explore more
                </a>
              </div>
              <div>
                <a href="#" className="hero-btn-sp">
                  Create post
                </a>
              </div>
            </div>
          </div>
          <div className="wrapper-sp">
            <div className="head-text"> CHAT </div>
            <div className="chat-box-sp"> FILL THE FORM BELOW TO START</div>
            <form action="#">
              <div className="field-sp">
                <input type="text" name="" defaultValue="YOUR NAME" />
              </div>
              <div className="field-sp">
                <input type="email" name="" defaultValue="EMAIL" />
              </div>
              <div className="field-sp">
                <input type="text" name="" defaultValue="MESSAGE" />
              </div>
              <div className="field-sp">
                <button type="submit"> START CHAT</button>
              </div>
            </form>
          </div>
        </section>
        <br />
        <br />
        <br />
        <br />
        <footer style={{ left: "88%", color: "black" }}>
          <p>SIGNED IN AS STUDENT</p>
        </footer>
      </>

    );
  }
}
export default StudentProfile;