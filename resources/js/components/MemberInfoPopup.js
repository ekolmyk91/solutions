import React, {Component} from 'react'

class MemberInfoPopup extends Component {
    render () {
        return (
            <div className="team-box__popup blockFlex">
                {/*<div className="close-icon">*/}
                {/*<svg><use xlink:href="#close-icon"></use></svg>*/}
                {/*</div>*/}
                <div className="img">
                    <img src="/images/front/logo8.png" alt="develop image" />
                </div>
                <div className="info blockFlex">
                    <div className="dev-name">
                        Develop Developer1
                    </div>
                    <div className="date-birth info__text">
                        <span className="info__label">Date-birth: </span>
                        16.10.2019
                    </div>
                    <div className="department info__text">
                        <span className="info__label">Department: </span>
                        Wordpress
                    </div>
                    <div className="position info__text">
                        <span className="info__label">Position: </span>
                        front-end
                    </div>
                    <div className="skills info__text">
                        <span className="info__label">Skills: </span>
                        Html, Css, Js, jQuery, Vue Js
                    </div>
                    <ul className="sertificate">
                        <li className="sertificate__item">
                            <img src="/images/front/sertificate.jpg" alt="sertificate image" />
                        </li>
                        <li className="sertificate__item">
                            <img src="/images/front/sertificate.jpg" alt="sertificate image" />
                        </li>
                        <li className="sertificate__item">
                            <img src=" /images/front/sertificate.jpg" alt="sertificate image" />
                        </li>
                    </ul>
                </div>
            </div>
        )
    }
}

export default MemberInfoPopup