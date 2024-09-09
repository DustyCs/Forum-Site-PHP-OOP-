import PropTypes from 'prop-types'

function Student(props){
    const student = <div className="student">
                        <p>Name: {props.name}</p>
                        <p>Age: {props.age}</p>
                        <p>Student: {props.isStudent ? "True" : "False"}</p>
                    </div>

    return (
        student
    );
}

Student.propTypes = {
    name: PropTypes.string,
    age: PropTypes.number,
    isStudent: PropTypes.bool,
}

Student.defaultProps = {
    name: "Guest",
    age: 0,
    isStudent: false,
}

export default Student