import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class SchoolAdmin extends React.Component {
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
            <div className="text-box">
              <h1 className="h1-sp">SCHOOL ADMIN PROFILE</h1>
            </div>
          </div>
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
                      <h2 style={{ textAlign: "center" }}>Jordan Nelson</h2>&gt;
                    </div>
                    <div className="card-body" style={{ padding: 50, fontSize: 20 }}>
                      <p className="mb-0">
                        <strong className="pr-1">SCHOOL ADMIN ID: </strong>1111111111
                      </p>
                      <p className="mb-0">
                        <strong className="pr-1">Email: </strong>
                        jordan.nelson@mavs.uta.edu
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
        </section>




        {/* Student Profile */}

        <div className="small-container-sp">
          <h2 className="title">Clubs</h2>
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
        <div className="small-container-sp">
          <h2 className="title">Students</h2>
          <div className="student-table">
            <table id="student">
              <tbody>
                <tr>
                  <th>STUDENT</th>
                  <th>CLUB ENROLLED</th>
                  <th>STUDENT ID</th>
                </tr>
                <tr>
                  <td>NAME1</td>
                  <td>CLUB1</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME2</td>
                  <td>CLUB2</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME3</td>
                  <td>CLUB3</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME1</td>
                  <td>CLUB1</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME2</td>
                  <td>CLUB2</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME3</td>
                  <td>CLUB3</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME1</td>
                  <td>CLUB1</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME2</td>
                  <td>CLUB2</td>
                  <td>1002024368</td>
                </tr>
                <tr>
                  <td>NAME3</td>
                  <td>CLUB3</td>
                  <td>1002024368</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div style={{ marginRight: 20, margin: 10 }}>
            <a href="#" className="hero-btn-sp">
              UPDATE STUDENT
            </a>
          </div>
          <div style={{ marginRight: 20, margin: 10 }}>
            <a href="#" className="hero-btn-sp">
              ADD STUDENT
            </a>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <footer style={{ left: "88%", color: "black" }}>
          <p>SIGNED IN AS SCHOOL ADMIN</p>
        </footer>
      </>


    );
  }
}
export default SchoolAdmin;