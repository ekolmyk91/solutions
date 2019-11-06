import React, {Component} from 'react'
import axios from 'axios'
import MemberPreview from './MemberPreview'
import MemberInfoPopup from './MemberInfoPopup'

class TeamList extends Component {
    constructor () {
        super()
        this.state = {
            members: [],
            error: null,
            isLoaded: false,
        }
    }

    componentDidMount () {
        axios.get('/api/members')
            .then(response => {
                // const members= response.data;
                this.setState({
                    members: response.data,
                    isLoaded: true
                });
            })
    }

    render () {
        const { isLoaded, members } = this.state;
        if(!isLoaded){
            return <div>Loading...</div>;
        }else{
            return (
                <section className="team-page">
                    <div className="wrapper blockFlex">
                        { members.map((member) => {
                            return (
                                <div className="wrapper blockFlex" key={member.id}>
                                    <div className="mainContent">
                                        <div className="team-box">
                                            <div className="wrapper blockFlex">
                                                <div className="team-box">
                                                    <div className="team-box__card ">
                                                        <MemberPreview />
                                                        <MemberInfoPopup />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            )
                        })}
                    </div>
                </section>
            )
        }


    }
}

export default TeamList