import React, {Component} from 'react'

class TeamList extends Component {
    render () {
        return (
            <section class="team-page">
                <div class="wrapper blockFlex">
                    <div class="mainContent">
                        <div class="team-box">
                            <div class="wrapper blockFlex">
                                <div class="mainContent">
                                    <div class="team-box">
                                        <div class="team-box__card ">
                                            <div class="team-box__item blockFlex">
                                                <div class="img">
                                                    {/*<img src="images/logo8.png" alt="develop image">*/}
                                                </div>
                                                <div class="info">
                                                    <div class="dev-name">Develop Developer1</div>
                                                    <div class="department info__text">Wordpress</div>
                                                </div>
                                            </div>

                                            <div class="team-box__popup blockFlex">
                                                {/*<div class="close-icon">*/}
                                                    {/*<svg><use xlink:href="#close-icon"></use></svg>*/}
                                                {/*</div>*/}
                                                {/*<div class="img">*/}
                                                    {/*<img src="images/logo8.png" alt="develop image">*/}
                                                {/*</div>*/}
                                                <div class="info blockFlex">
                                                    <div class="dev-name">
                                                        Develop Developer1
                                                    </div>
                                                    <div class="date-birth info__text">
                                                        <span class="info__label">Date-birth: </span>
                                                        16.10.2019
                                                    </div>
                                                    <div class="department info__text">
                                                        <span class="info__label">Department: </span>
                                                        Wordpress
                                                    </div>
                                                    <div class="position info__text">
                                                        <span class="info__label">Position: </span>
                                                        front-end
                                                    </div>
                                                    <div class="skills info__text">
                                                        <span class="info__label">Skills: </span>
                                                        Html, Css, Js, jQuery, Vue Js
                                                    </div>
                                                    <ul class="sertificate">
                                                        <li class="sertificate__item">
                                                            {/*<img src="images/sertificate.jpg" alt="sertificate image">*/}
                                                        </li>
                                                        <li class="sertificate__item">
                                                            {/*<img src="images/sertificate.jpg" alt="sertificate image">*/}
                                                        </li>
                                                        <li class="sertificate__item">
                                                            {/*<img src=" images/sertificate.jpg" alt="sertificate image">*/}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        )
    }
}

export default TeamList