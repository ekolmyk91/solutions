import React, {Component} from 'react'
import axios from 'axios'
import MemberPreview from './MemberPreview'
import MemberInfoPopup from './MemberInfoPopup'

class TeamList extends Component {
    constructor (props) {
        super(props)
        this.state = {
            members: [],
            error: null,
            isLoaded: false,
            showPopupId: false
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

    togglePopup(id, e) {
        this.setState({
            showPopupId: id ? id : null
        });

        console.log(this.state.showPopupId)
    }

    render () {
        const { isLoaded, members } = this.state;
        if(!isLoaded){
            return <div>Loading...</div>;
        }else{

            return (
                <section class="team-page">
                    <div class="wrapper blockFlex">
                        <div class="mainContent">
                            <div class="team-box">
                                { members.map((member) => {
                                    return (
                                        <div className='team-box__card' key={member.id} onClick={this.togglePopup.bind(this, member.id)}>
                                            <MemberPreview member={member} />
                                            {this.state.showPopupId ==  member.id ?
                                                <MemberInfoPopup member={member} closePopup={this.togglePopup.bind(this, null)} /> :
                                                null
                                            }

                                        </div>
                                    )
                                })}
                            </div>
                        </div>
                    </div>
                </section>
            )
        }
    }
}

export default TeamList