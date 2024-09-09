import PropTypes from 'prop-types'

function UserGreeting(prop){

    const welcomeMessage = <h2 className="logged-in">
                                Welcome {prop.username}
                            </h2>

    const loginPrompt = <div className="not-logged-in">
                            Log In!
                        </div>

    // if(prop.isLogged){
    //     return welcomeMessage
    // }
    // else{
    //     return(
    //          loginPrompt
    //     );
    // }

    return(prop.isLogged ? welcomeMessage : loginPrompt);

}

UserGreeting.proptypes = {
    isLogged: PropTypes.bool,
    username: PropTypes.string,
}

UserGreeting.defaultProps = {
    isLogged: false,
    username: "Guest",
}

export default UserGreeting