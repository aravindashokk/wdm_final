import React from "react";
import { Link } from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Inventory extends React.Component {
    render() {
        return (
            <>
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
                    <h1 style={{ textAlign: "center" }}>INVENTORY</h1>
                    <div className="small-container cart-page">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
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
                                </tr>
                                <tr>
                                    <td>
                                        <div className="cart-info">
                                            <img src="css/images/product4.png" className="product-img" />
                                            <div>
                                                <p>Guitar</p>
                                                <small>Price: $75</small>
                                                <br />
                                                <a href="">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="number" name="" defaultValue={1} />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div className="proceed-payment"></div>
                    </div>
                    <footer>
                        <p>SIGNED IN AS STUDENT</p>
                    </footer>
                </section>
            </>

        );
    }
}
export default Inventory;