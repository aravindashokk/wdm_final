import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class SuperAdmin extends React.Component{
    render(){
        return(
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
        <h1 className="h1-sp">SUPER ADMIN</h1>
      </div>
    </nav>
  </section>
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
              <h2 style={{ textAlign: "center" }}>Jordan Nelson</h2>&gt;
            </div>
            <div className="card-body" style={{ padding: 50, fontSize: 20 }}>
              <p className="mb-0">
                <strong className="pr-1">SUPER ADMIN ID: </strong>1111111111
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
  <div className="small-container-sp">
    <h2 className="title">SCHOOLS</h2>
    <div className="student-table">
      <table id="student">
        <tbody>
          <tr>
            <th>School Name</th>
            <th>SCHOOL ADMIN ID</th>
            <th>SCHOOL ID</th>
          </tr>
          <tr>
            <td>SCHOOL NAME1</td>
            <td>ADMIN1</td>
            <td>0001</td>
          </tr>
          <tr>
            <td>SCHOOL NAME2</td>
            <td>ADMIN2</td>
            <td>0002</td>
          </tr>
          <tr>
            <td>SCHOOL NAME3</td>
            <td>ADMIN3</td>
            <td>0003</td>
          </tr>
          <tr>
            <td>SCHOOL NAME1</td>
            <td>ADMIN1</td>
            <td>0001</td>
          </tr>
          <tr>
            <td>SCHOOL NAME2</td>
            <td>ADMIN2</td>
            <td>0002</td>
          </tr>
          <tr>
            <td>SCHOOL NAME3</td>
            <td>ADMIN3</td>
            <td>0003</td>
          </tr>
          <tr>
            <td>SCHOOL NAME1</td>
            <td>ADMIN1</td>
            <td>0001</td>
          </tr>
          <tr>
            <td>SCHOOL NAME2</td>
            <td>ADMIN2</td>
            <td>0002</td>
          </tr>
          <tr>
            <td>SCHOOL NAME3</td>
            <td>ADMIN3</td>
            <td>0003</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style={{ marginRight: 20, margin: 10 }}>
      <a href="#" className="hero-btn-sp">
        UPDATE SCHOOL
      </a>
    </div>
    <div style={{ marginRight: 20, margin: 10 }}>
      <a href="#" className="hero-btn-sp">
        ADD SCHOOL
      </a>
    </div>
  </div>
  <div className="small-container-sp">
    <h2 className="title">Insights</h2>
    <div>
      <img className="graph" src="css/images/graph.png" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <footer style={{ left: "88%", color: "black" }}>
    <p>SIGNED IN AS SUPER ADMIN</p>
  </footer>
</>

        );
    }
}
export default SuperAdmin;