import Card from './Card.jsx'
import Button from './Button.jsx'
import Student from './Student.jsx'
import UserGreeting from './UserGreeting.jsx'


function App() {
  return(
    <>
      <Card/>
      <Card/>
      <Card/>
      <Button/>
      <Student name='Johnny' age={30} isStudent={true}/>
      <Student name='Patrick' age={42} isStudent={false}/>
      <Student /> {/* Using default prompt */}
      {/* <UserGreeting isLogged={false} username="John"/> */}
      <UserGreeting /> {/* Using default prompt */}

    </>
    
  );

}

export default App
