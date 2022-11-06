import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Kart extends React.Component {
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
                onClick={(e) => { e.preventDefault(); window.location.href = '/kart'; }}
                width="20px"
                height="20px"
              />
            </ul>
          </div>
          <i className="fa fa-bars" onClick={showMenu} />
        </nav>
        <div className="small-container-cart-page">
          <table className="table-kart">
            <tbody>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
              <tr>
                <td>
                  <div className="cart-info">
                    <img src="css/images/product1.png" className="product-img" />
                    <div>
                      <p>BALENCIAGA HOODIE</p>
                      <small>Price: $500</small>
                      <br />
                      <a href="">Remove</a>
                    </div>
                  </div>
                </td>
                <td>
                  <input type="number" name="" defaultValue={1} />
                </td>
                <td>$500</td>
              </tr>
              <tr>
                <td>
                  <div className="cart-info">
                    <img src="css/images/product2.png" className="product-img" />
                    <div>
                      <p>STUDY TABLE</p>
                      <small>Price: $120</small>
                      <br />
                      <a href="">Remove</a>
                    </div>
                  </div>
                </td>
                <td>
                  <input type="number" name="" defaultValue={1} />
                </td>
                <td>$120</td>
              </tr>
              <tr>
                <td>
                  <div className="cart-info">
                    <img src="css/images/product3.png" className="product-img" />
                    <div>
                      <p>BAGPACK</p>
                      <small>Price: $25</small>
                      <br />
                      <a href="">Remove</a>
                    </div>
                  </div>
                </td>
                <td>
                  <input type="number" name="" defaultValue={1} />
                </td>
                <td>$25</td>
              </tr>
            </tbody>
          </table>
          <div className="proceed-payment">
            <div className="total-price">
              <table>
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <td>$645</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$35.87</td>
                  </tr>
                  <tr>
                    <td>total</td>
                    <td>$680.87</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <input type="button" defaultValue="Proceed to Pay" onClick={(e) => { e.preventDefault(); window.location.href = '/payment'; }} />
        </div>
        <footer>
          <p>SIGNED IN AS STUDENT</p>
        </footer>
      </section>

    );
  }
}
export default Kart;


<button
  type="button" className="submitBtn"
  onClick={(e) => {
    e.preventDefault();
    window.location.href = '/profile';
  }}
> Click here</button>