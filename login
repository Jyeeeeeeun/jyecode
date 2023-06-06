import React from 'react';
import { View, Text, TextInput, Button } from 'react-native';

const App = () => {
  return (
    <View style={{ flex: 1, justifyContent: 'center', alignItems: 'center', backgroundColor: '#ECF2FA' }}>
      <Text style={{ fontSize: 40, fontWeight: 'bold', marginTop: 135, marginBottom: 154 }}>Log In</Text>
      <Text>ID</Text>
      <TextInput style={{ marginBottom: 25 }} />
      <Text>Password</Text>
      <TextInput secureTextEntry style={{ marginBottom: 236 }} />
      <Button title="Log In" color="#FFFFFF" onPress={() => {}} style={{ marginBottom: 60 }} />
    </View>
  );
};

export default App;
