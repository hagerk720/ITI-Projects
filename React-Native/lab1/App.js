import { StatusBar } from "expo-status-bar";
import {
  SafeAreaView,
  ScrollView,
  StyleSheet,
  Image,
  Text,
  View,
  Dimensions,
} from "react-native";

export default function App() {
  return (
    <SafeAreaView style={styles.container}>
      <ScrollView horizontal showsVerticalScrollIndicator={false}>
        <Image
          source={require("./assets/img_4.jpg")}
          style={styles.image}
        ></Image>
        <Image
          source={require("./assets/img_5.jpg")}
          style={styles.image}
        ></Image>
        <Image
          source={require("./assets/img_6.jpg")}
          style={styles.image}
        ></Image>
        <StatusBar style="auto" />
      </ScrollView>
    </SafeAreaView>
  );
}

const screenWidth = Dimensions.get("window").width;
const screenHeight = Dimensions.get("window").height;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  },
  scrollViewContent: {
    alignItems: "center",
  },
  image: {
    width: screenWidth,
    height: screenHeight,
  },
});
