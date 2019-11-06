import React, {Component} from 'react'

class MemberPreview extends Component {
    render () {
        return (
            <div className="team-box__item blockFlex">
                <div className="img">
                    <img src="/images/front/logo8.png" alt="develop image" />
                </div>
                <div className="info">
                    <div className="dev-name">Develop Developer1</div>
                    <div className="department info__text">Wordpress</div>
                </div>
            </div>
        )
    }
}

export default MemberPreview