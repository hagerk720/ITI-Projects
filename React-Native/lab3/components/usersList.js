import React, { useState } from "react";
import { View, Text, Button, FlatList } from "react-native";
import routes from "../common/routes";
import { useNavigation } from "@react-navigation/native";
import styles from "../style/styles";

const UsersList = ({ search }) => {
  const [users, setUsers] = useState([
    {
      id: 1,
      name: "Hager Khaled",
      username: "Hager",
      email: "Hager@gmail.com",
      // image: require("../assets/avatar/avatar2.jpg"),
      phone: "01124513211",
    },
    {
      id: 2,
      name: "mariam Khaled",
      username: "mariam",
      email: "mariam@gmail.com",
      // image: require("../assets/avatar/avatar3.jpg"),
      phone: "01011241412",
    },
    {
      id: 3,
      name: "Radwa Khalil",
      username: "Radwa",
      email: "Radwa@gmail.com",
      // image: require("../assets/avatar/avatar1.jpg"),
      phone: "01008457741",
    },
    {
      id: 4,
      name: "Radwa Nabil",
      username: "Radwa",
      email: "Radwa@gmail.com",
      // image: require("../assets/avatar/avatar3.jpg"),
      phone: "01221212645",
    },
    {
      id: 5,
      name: "Nada Saeed",
      username: "Nada",
      email: "Nada@gmail.com",
      // image: require("../assets/avatar/avatar1.jpg"),
      phone: "01224243411",
    },
  ]);

  const navigation = useNavigation();

  return (
    <>
      <FlatList
        style={styles.usersList}
        data={users.filter((user) => user.name.includes(search))}
        keyExtractor={(item) => item.id.toString()}
        renderItem={({ item }) => (
          <View style={styles.user}>
            <Text style={[styles.userText]}>{item.name}</Text>

            <Button
              title="Show More"
              onPress={() => {
                navigation.navigate(routes.details, item);
              }}
            />
          </View>
        )}
      />
    </>
  );
};
export default UsersList;
