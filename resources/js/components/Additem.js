import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Additem extends React.Component {
  render() {
    return (
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
                <a href="index.html">HOME</a>
              </li>
              <li>
                <a href="aboutUs.html">ABOUT</a>
              </li>
              <li>
                <a href="login.html">LOGIN</a>
              </li>
              <li>
                <a href="http://sxg4476.uta.cloud/uncategorized/blog-home/"> BLOG</a>
              </li>
              <li>
                <a href="contactUs.html">CONTACT</a>
              </li>
              <li>
                <a href="customer_profile.html">PROFILE</a>
              </li>
              <li>
                <a href="marketplaceIndex.html">MARKETPLACE</a>{" "}
              </li>
            </ul>
          </div>
          <i className="fa fa-bars" onClick={showMenu} />
        </nav>
        <h1 style={{ textAlign: "center", color: "white" }}>Add Items </h1>
        <div className="product-container">
          <form action="/action_page.php">
            <div className="create-row">
              <div className="create-col25">
                <label htmlFor="fname">Name</label>
              </div>
              <div className="create-col">
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="Your name.."
                />
              </div>
            </div>
            <div className="create-row">
              <div className="create-col25">
                <label htmlFor="lname">Upload Image</label>
              </div>
              <div className="create-col">
                <input type="file" id="lname" />
              </div>
            </div>
            <div className="create-row">
              <div className="create-col25">
                <label htmlFor="country">Type</label>
              </div>
              <div className="create-col">
                <select id="country" name="country">
                  <option value="australia">Select What to Add</option>
                  <option value="canada">Product</option>
                  <option value="usa">Post</option>
                  <option value="usa">Advertisement</option>
                </select>
              </div>
            </div>
            <div className="create-row">
              <div className="create-col25">
                <label htmlFor="subject">Description</label>
              </div>
              <div className="create-col">
                <textarea
                  id="subject"
                  name="subject"
                  placeholder="Write something.."
                  style={{ height: 200 }}
                  defaultValue={""}
                />
              </div>
            </div>
            <div className="create-row">
              <input type="submit" defaultValue="Submit" />
            </div>
          </form>
        </div>
        <footer></footer>
      </section>

    );
  }
}
export default Additem;