import React from 'react';
import { View, Text, TextInput, Button } from 'react-native';
import { Navigation } from 'react-native-navigation';

class LoginActivity extends React.Component {
  handleLoginClick = () => {
    Navigation.push(this.props.componentId, {
    component: {
      name: 'SerchScreen',
      options: {
        topBar: {
          title: {
            text: 'Serch',
  };

  render() {
    return (
      <View style={{ flex: 1, backgroundColor: '#ECF2FA', padding: 16 }}>
        <Text style={{ fontSize: 40, fontWeight: 'bold', marginTop: 135, marginBottom: 154 }}>
          Log In
        </Text>
        <Text>ID</Text>
        <TextInput
          style={{ marginBottom: 25 }}
          placeholder="Enter your ID"
        />
        <Text>Password</Text>
        <TextInput
          style={{ marginBottom: 236 }}
          placeholder="Enter your password"
          secureTextEntry={true}
        />
        <Button
          title="Log In"
          onPress={this.handleLoginClick}
        />
      </View>
    );
  }
}

export default LoginActivity;
